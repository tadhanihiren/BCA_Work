import java.awt.*;
import javax.swing.*;
class SwingDemo extends JFrame
{
	SwingDemo()
	{
		JButton b = new JButton("Click Me");
		b.setBounds(150,80,130,40);
		
		add(b);
		setSize(400,400);
		setTitle("Button Demo Programm");
		setLayout(null);
		setVisible(true);
		//setDefaultCloseOperation(EXIT_ON_CLOSE);
	}
	
	public static void main(String [] args)
	{
		SwingDemo awt = new SwingDemo(); 
	}
}