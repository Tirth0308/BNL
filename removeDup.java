import java.util.Arrays;

public class removeDup {
    public static long remove(int arr[],int n)
    {
        Arrays.sort(arr);
        long sum1 = 0;
        long sum2 = 0;
        for(int i = 0; i <n; i++)
        {
            if(arr[i]>0)
            {
                sum1 = sum1 + arr[i];
            }
            if(arr[i]<0)
            {
                sum2 = sum2 + arr[i];
            }
        }
        if((sum1+sum2)>0)
        {
            return sum1+sum2;
        }
        else
        {
            return arr[0];
        }
    }
    public static void main(String[] args) {
        int arr[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};
        System.out.println(remove(arr,9)); 

    }
    
}
