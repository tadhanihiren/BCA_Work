import java.awt.*;
import java.io.*;

class Awt_From extends Frame
{
	Button btn;
	Label lbl;
	TextField txtfld;
	Checkbox chk1,chk2,chk3;
	Checkbox chkm,chkf;
	CheckboxGroup chkgrp;
	
	Awt_From()
	{
		lbl = new Label("User Name");
		txtfld = new TextField();

		btn = new Button("Click me");
		chk1 = new Checkbox("MCA",true);
		chk2 = new Checkbox("BCA");
		chk3 = new Checkbox("BBA");
		chkgrp = new CheckboxGroup();

		chkm = new Checkbox("Male",chkgrp,true);
		chkf = new Checkbox("Female",chkgrp,false);
		
		add(btn);
		add(lbl);	add(txtfld);	add(chk1);
		add(chk2);	add(chk3);
		add(chkm);	add(chkf);

		setSize(500,500);
		setVisiblity(true);
		setLayout(null);
		setTitle("Demo AWT Programm");

		lbl.setBounds(50,50,80,80);
		txtfld.setBounds(150,50,120,30);
		btn.setBounds(100,270,80,40);
		chk1.setBounds(100,100,60,25);
		chk2.setBounds(100,140,60,25);
		chk3.setBounds(100,175,60,25);
		chkm.setBounds(80,210,60,25);
		chkf.setBounds(160,210,60,25);
		
	}
	
	public static void main(String [] args)
	{
		Awt_From awtf = new Awt_From(); 
	}
}