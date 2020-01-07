class MyException extends Exception
{
	MyException(String msg)
	{
		super(msg);
	}
}

class Emp
{	
	int age;
	public static void emp_age(int age) throws MyException
	{
		if(age<=0)
		{
			throw new MyException("Age Cant Be Less Then 0");
		}
		else
		{
			System.out.println("Age: "+age);
		}
	}
}

public class Main_EmpAge
{
	public static void main(String [] args)
	{
		try
		{
			Emp.emp_age(0);
		}
		catch(MyException e)
		{
			System.out.println(e);
		}
	}
}