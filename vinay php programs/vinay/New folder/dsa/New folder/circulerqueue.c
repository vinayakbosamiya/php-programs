#include<stdio.h>
#define size 5
int front = -1,rear = -1;
int queue[size];
void enqueue(int);
void dequeue();
void display();
int main(){
    enqueue(1);
    enqueue(2);
    dequeue();
}


void enqueue(int ele)
{
    if(rear == size-1)
    {
        printf("\nQueue Is Full\n");
    }
}


































// {
//     if(front == 0 && rear == size -1)
//     {
//         printf("\nQueue Is Full\n");
//     }
//     else if(front == -1)
//     {
//         front = 0;
//         rear = 0;
//         queue[rear]=ele;
//     }
    
//     else if(rear == size-1)
//     {
//         rear = 0;
//      queue[rear]=ele;
//     }
    
//     else{
//         rear++;
//         queue[rear]=ele;
//     }
// }

// void dequeue(){
//     if(front == -1){
//         printf("Queue Is Empty");
//     }
//     else if(front == rear)    
//     {
//         front = rear = -1;
//     }
//     else if(front == size){
//         front = 0;
//     }
//     else{
//         front++;
//     }
// }


