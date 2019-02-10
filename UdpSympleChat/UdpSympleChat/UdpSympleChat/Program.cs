using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Sockets;
using System.Text;
using System.Threading.Tasks;

namespace UdpSympleChat
{
    class Program
    {
        static int localPort = 4000;
        static int remotePort = 4000;
        static Socket listeningSocket;
        static void Main(string[] args)
        {
            //Console.WriteLine("Введите порт для приема сообщений: ");
            //localPort = Convert.ToInt32(Console.ReadLine());
            //Console.WriteLine("Введите порт для отправки сообщений: ");
            //remotePort = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Введите сообщение: ");
            Console.WriteLine();
            try
            {
                listeningSocket = new Socket(AddressFamily.InterNetwork, SocketType.Dgram, ProtocolType.Udp);
                listeningSocket.SetSocketOption(SocketOptionLevel.Socket, SocketOptionName.Broadcast, 1);
                Task listeningTask = new Task(Listen);
                listeningTask.Start();
                while (true)
                {
                    string message = Console.ReadLine();
                    byte[] data = Encoding.Unicode.GetBytes(message);
                    //EndPoint remotePoint = new IPEndPoint(IPAddress.Parse("10.10.6.6"), remotePort);
                    EndPoint remotePoint = new IPEndPoint(IPAddress.Broadcast, remotePort);

                    listeningSocket.SendTo(data, remotePoint);
                }

            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                Close();
            }

        }

        private static void Close()
        {
            if(listeningSocket != null)
            {
                listeningSocket.Shutdown(SocketShutdown.Both);
                listeningSocket.Close();
                listeningSocket = null;
            }
        }

        private static void Listen()
        {
            try
            {
                //прослушиваем по адресу
                IPEndPoint localIp = new IPEndPoint(IPAddress.Parse("10.10.6.10"), localPort);
                listeningSocket.Bind(localIp);

                while (true)
                {
                    // полученеие сообщения 
                    StringBuilder builder = new StringBuilder();
                    int bytes = 0;
                    byte[] data = new byte[256];
                    EndPoint remoteIp = new IPEndPoint(IPAddress.Any, remotePort);
                    do
                    {
                        bytes = listeningSocket.ReceiveFrom(data, ref remoteIp);
                        builder.Append(Encoding.Unicode.GetString(data, 0, bytes));
                    } while (listeningSocket.Available > 0);
                    IPEndPoint remoteFullIp = remoteIp as IPEndPoint;
                    Console.WriteLine($"{remoteFullIp.Address}: {remoteFullIp.Port} - {builder.ToString()}");
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                Close();
            }
        }
    }
}
