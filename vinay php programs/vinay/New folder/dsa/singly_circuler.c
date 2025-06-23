#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
struct list
{
    int info;
    struct list *next;
};
typedef struct list node;
node *p;
void create(int, node *);
void display(node *);
void addbeg(int, node *);
void addafter(int, int, node *);
void deleted(int, node *);
void main()
{
    p = NULL;
    
    create(10, p);
    create(11, p);
    create(12, p);
    display(p);
    printf("\nafter adding element in beginning : ");
    addbeg(0, p);
    display(p);
    printf("\nafter adding element in specific position");
    addafter(3, 12, p);
    display(p);
    printf("\nafter deleted : ");
    deleted(11, p);
    display(p);
    
}
void create(int ele, node *q)
{
    if (q == NULL)
    {
        p = (node *)malloc(sizeof(node));
        p->info = ele;
        p->next = p;
    }
    else
    {
        while (q->next != p)
        {
            q = q->next;
        }
        q->next = (node *)malloc(sizeof(node));
        q->next->info = ele;
        q->next->next = p;
    }
}
void display(node *q)
{
    do
    {
        printf("\nElement is %d", q->info);
        q = q->next;
    } while (q != p);
}
void addbeg(int ele, node *q)
{
    node *temp;
    temp = (node *)malloc(sizeof(node));
    temp->info = ele;
    temp->next = q;
    while (q->next != p)
    {
        q = q->next;
    }
    q->next = temp;
    p = temp;
}
void addafter(int c, int ele, node *q) // pos is the same as c var.
{
    node *temp;
    int i;
    for (i = 1; i < c; i++)
    {
        q = q->next;
        if (q == p)
        {
            printf("\nposition is out of range");
            return;
        }
    }
    temp = (node *)malloc(sizeof(node));
    temp->info = ele;
    temp->next = q->next;
    q->next = temp;
}
void deleted(int ele, node *q)
{
    node *temp;
    if (q->info == ele)
    {
        temp = p;
        do
        {
            q = q->next;
        } while (q->next != p);
        p = p->next;
        q->next = p;
        free(temp);
        return;
    }
    while (q->next->next != p)
    {
        if (q->next->info == ele)
        {
            temp = q->next;
            q->next = temp->next;
            free(temp);
            return;
        }
        q = q->next;
    }
}

/*
--------- output ----------- 
Element is 10
Element is 11
Element is 12
after adding element in beginning :      
Element is 0
Element is 10
Element is 11
Element is 12
after adding element in specific position
Element is 0
Element is 10
Element is 11
Element is 12
Element is 12
after deleted :
Element is 0
Element is 10
Element is 12
Element is 12
*/