// // #include<stdio.h>
// // #include<stdlib.h>
// // #include<time.h>
// // int ran(int a)
// // {
// //     int i;
// //     int num  = (rand() % (a + 1));
// //     return num;
// // }
// // int function(int n)
// // {
// //     int i;

// //     if(n <= 0){

// //         return 0;
// //     }

// //     else{
// //         i = ran(n-1);
// //         printf("this %d\n",i);
// //         return function(i) + function(n - 1 - i);
// //     }
// // }

// // int main()
// // {
// //     function(6);
// // }

// #include <stdio.h>

// int isprime(int n)
// {
//     if (n <= 1)  
//         return 0;  // 1 and negative numbers are not prime
    
//     for (int i = 2; i * i <= n; i++)
//     {
//         if (n % i == 0)
//             return 0;  // If divisible, it's not a prime
//     }
//     return 1;  // Prime number
// }

// int main()
// {
//     int a =7;
    
//     if (isprime(a))
//         printf("%d is a prime number\n", a);
//     else
//         printf("%d is not a prime number\n", a);

//     return 0;
// }

