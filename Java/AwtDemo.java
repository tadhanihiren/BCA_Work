import java.awt.*;

class AwtDemo extends Frame
{
	AwtDemo()
	{
		Button b = new Button("Click Me");
		b.setBounds(150,80,130,40);
		
		add(b);
		setSize(400,400);
		setTitle("Button Demo Programm");
		setLayout(null);
		setVisible(true);
	}
	
	public static void main(String [] args)
	{
		AwtDemo awt = new AwtDemo(); 
	}
}