/*
** ex_04.c for ex_04.c in /home/jerome/rendu/pool_c_d04/ex_04
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct  5 16:17:28 2017 demourgues
** Last update Thu Oct  5 18:19:46 2017 demourgues
*/
#include <stdio.h>

void my_sort_int_tab(int *tab, int size)
{
  int i = 0;
  int t = 1;
  while (t == 1)
    {
      i = 0;
      t = 0;
    while (i < size-1)
	{
	  if (tab[i] > tab[i+1])
	     {
	       int nb;
	       nb = tab[i];
	       tab[i] = tab[i+1];
	       tab[i+1] = nb;
	       t = 1;
	     }
	  ++i;
	}
     }
} 

  static void print_tab_(int *tab, int size)
{
  int i = 0;

  while (i < size)
    printf("%d ", tab[i++]);
}

/*int main(int argc, char const *argv[])
{
  int tab[3] = {1, 4, 2};
  int arg[5] = {19, 2, 1, -2, 5};
  int fake[2] = {1, 2};

  my_sort_int_tab(tab, 3);
  my_sort_int_tab(arg, 5);
  my_sort_int_tab(fake, 2);
  print_tab_(tab, 3);
  print_tab_(arg, 5);
  print_tab_(fake, 2);
(void)argc;
(void)argv;
return 0;
}
*/
