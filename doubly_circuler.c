#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

struct list
{
    int info;
    struct list *next;
    struct list *prev;
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
    node *temp;
    if (q == NULL)
    {
        p = (node *)malloc(sizeof(node));
        p->info = ele;
        p->next = p;
        p->prev = p;
    }
    else
    {
        temp = p->prev;
        node *newnode = (node *)malloc(sizeof(node));
        newnode->info = ele;
        newnode->next = p;
        newnode->prev = temp;
        temp->next = newnode;
        p->prev = newnode;
    }
}

void display(node *q)
{
    node *start = q;
    if (q == NULL)
    {
        printf("\nList is empty.");
        return;
    }
    do
    {
        printf("\nElement is %d", q->info);
        q = q->next;
    } while (q != start);
}

void addbeg(int ele, node *q)
{
    node *temp = (node *)malloc(sizeof(node));
    temp->info = ele;
    temp->next = p;
    temp->prev = p->prev;

    p->prev->next = temp;
    p->prev = temp;

    p = temp;
}

void addafter(int c, int ele, node *q)
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
    temp->prev = q;

    q->next->prev = temp;
    q->next = temp;
}

void deleted(int ele, node *q)
{
    node *temp = q;

    if (p == NULL)
        return;

    // if only one node
    if (p->next == p && p->info == ele)
    {
        free(p);
        p = NULL;
        return;
    }

    // if first node to be deleted
    if (p->info == ele)
    {
        temp = p;
        p->prev->next = p->next;
        p->next->prev = p->prev;
        p = p->next;
        free(temp);
        return;
    }

    do
    {
        if (q->info == ele)
        {
            q->prev->next = q->next;
            q->next->prev = q->prev;
            free(q);
            return;
        }
        q = q->next;
    } while (q != p);
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