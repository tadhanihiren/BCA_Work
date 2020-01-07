import java.lang.*;
class Divider
{
	public static void main(String args[])
	{
		try{

		System.out.println("Before Division");
		int i = Integer.parseInt(args[0]);
		int j = Integer.parseInt(args[1]);
		System.out.println(i/j);
		System.out.println("After Division");

		}
		
		
		catch(NumberFormatException e)
		{
			System.out.println("NumberFromateException");
		}

		catch(ArrayIndexOutOfBoundsException e)	
		{
			System.out.println("ArayIndexOutOfBoundsExceptiion");
		}

		catch(ArithmeticException e)	
		{
			System.out.println("Arithmetic Exception");
		}

		catch(Exception e)
		{
			System.out.println("General Exception");
		}

		finally
		{
			System.out.println("Finally");
		}
		
	}
}