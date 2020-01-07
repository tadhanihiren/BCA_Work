class A extends Thread
{
	public void run()
	{
		for(int i=1;i<=5;i++)
		{
			System.out.println("Thread From Class A of I :"+i);
		
			if(i==1)
			{
				yield();
			}
		}
		System.out.println("Exit From Class A");
	}
}

class B extends Thread
{
	public void run()
	{
		for(int j=1;j<=5;j++)
		{
			System.out.println("Thread From Class B of J :"+j);
		}
		System.out.println("Exit From Class B");
	}
}

class C extends Thread
{
	public void run()
	{
		for(int k=1;k<=5;k++)
		{
			System.out.println("Thread From Class C of K :"+k);
		
			if(k==2)
			{
				try
				{
					sleep(5000);	//pause the thread for 5 seconds(sleep() is in mili second)
				}
				catch(Exception e)
				{
					System.out.println(e);
				}
			}
		}
		System.out.println("Exit From Class C");
	}
}

public class MainThread
{
	public static void main(String [] args)
	{
		A a = new A();
		B b = new B();
		C c = new C();

		a.setName("Yagnik");
		b.setName("Ajay");		
		c.setName("Umesh");

		a.setPriority(3);
		
		//a.stop();
		//b.setPriority(3);
		c.setPriority(1);

		System.out.println("A: "+a.getName());
		System.out.println("B: "+b.getName());
		System.out.println("C: "+c.getName());

		

		a.start();
		b.start();
		c.start();
	}
}