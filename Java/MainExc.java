import java.lang.*;
class ex4
{
	static int sum(int n1,int n2)
	{
		if(n1==0)
		{
			throw new ArithmeticException("First Parameter Is Not Valid");
		}
		else
		{
			return(n1+n2);
		}
	}
}
public class MainExc
{
	public static void main(String [] args)
	{
		int ans = ex4.sum(10,20);
		System.out.println("Answer: "+ans);
	}
}