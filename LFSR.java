import java.util.Arrays;

public class LFSR {
	static byte[] Crypt(byte[] data, long initialValue)
	{
		
		int feedback = (int)0x87654321; 
		int state = (int)initialValue;
		for(int i = 0; i < data.length; i++)
		{
			long lsb = 0;
			for(int j = 0; j < 8; j++)
			{
				lsb = state & 1;
				state = state >>> 1;
				if (lsb == 0x1)
				{
					state = state ^ feedback;
				}
				System.out.println("Step:" + j + " = " + Integer.toHexString(state));
			}
			System.out.println("XORing Current State:" +  Integer.toHexString(state) + " and Initial Value:" + Long.toHexString(initialValue));
			 data[i] = (byte) ((data[i] & 0xFF) ^ (state & 0xFF));
			 System.out.println(data[i]);
		}
		for (byte b : data) {
            String st = String.format("%02X", b);
            System.out.print("\\x" + st);
        }
		return data;
	}
	
	public static void main(String[] args)
	{
		byte[] data = {'a','p','p','l','e'};
		Crypt(data, 0x12345678);
	}
}
	
