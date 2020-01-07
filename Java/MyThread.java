class MyTh extends Thread
{
	public void run()
	{
		System.out.println("Theread is runnimg");
	}
}

public class MyThread
{
	public static void main(String [] args)
	{
		MyTh t = new MyTh();
		t.start();
		//t.start();

		
	}
}