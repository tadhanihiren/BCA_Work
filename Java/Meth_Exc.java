import java.lang.*;
class Meth_Exc
{
	public static void main(String args[])
	{
		try
		{
			System.out.println("Before a");
			a();
			System.out.println("After a");
		}	
		catch(ArrayIndexOutOfBoundsException e)
		{
			System.out.println("ArrayIndexOutOfBoundsException");
		}	
		
		finally
		{
			System.out.println("Main Finally");
		}
		
	}

	public void a()
	{
		try
		{
			System.out.println("Before b");
			b();
			System.out.println("After b");
		}	
		catch(NullPointerException e)
		{
			System.out.println("NullPointerException");
		}

		finally
		{
			System.out.println("a Finally");
		}

	}
	
	public void b()
	{
		try
		{
			int a[] = new int[5];
			a[10] = 10;
		}	
		catch(NumberFormatException e)
		{
			System.out.println("NumberFormatException");
		}

		finally
		{
			System.out.println("b Finally");
		}
	}
}