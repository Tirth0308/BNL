import java.util.*;

public class arraySortandKth {
    
    public static int sort012(int arr[], int n)
    {
        int last = arr[n-1];
        int count = 0;
        int ans = -1;
        for(int i = 0; i<last;)
        {
        //    if(arr[i]==0)
        //    {
        //         i++;
        //    }
            if(arr[i]<last)
            {
                i = i + arr[i];
                count++;
            }
            if(arr[i]==last)
            {
                ans = count+1;
            }
       }
       return ans;
        
    }
        
    public static void main(String[] args) {
        int arr[] = {1,2,3,4,5,9};
        // int arr1[] = {1,2,6,7};
        System.out.println(sort012(arr,6)); 
    }
    
}

