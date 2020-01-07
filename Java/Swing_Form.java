import java.awt.*;
import javax.swing.*;

class Swing_Form extends JFrame
{
	JButton btn;
	JLabel lbl;
	JTextField txtfld;
	JCheckBox chk1,chk2,chk3;
	JRadioButton chkgrp1,chkgrp2;
	
	Swing_Form()
	{
		
		lbl = new JLabel("User Name");
		txtfld = new JTextField();

		btn = new JButton("Click me");
		chk1 = new JCheckBox("MCA",true);
		chk2 = new JCheckBox("BCA");
		chk3 = new JCheckBox("BBA");
		chkgrp1 = new JRadioButton("Male",true);
		chkgrp2 = new JRadioButton("Female",false);
		
		add(btn);
		add(lbl);	add(txtfld);	add(chk1);
		add(chk2);	add(chk3);
		add(chkgrp1);	add(chkgrp2);

		setSize(500,500);
		setLayout(null);
		setTitle("Demo Swing Programm");

		lbl.setBounds(50,50,80,80);
		txtfld.setBounds(150,50,120,30);
		btn.setBounds(100,270,80,40);
		chk1.setBounds(100,100,60,25);
		chk2.setBounds(100,140,60,25);
		chk3.setBounds(100,175,60,25);
		chkgrp1.setBounds(80,210,60,25);
		chkgrp2.setBounds(160,210,60,25);
		setVisible(true);

		setDefaultCloseOperation(EXIT_ON_CLOSE);
	}
	
	public static void main(String [] args)
	{
		Swing_Form swgf = new Swing_Form(); 
	}
}