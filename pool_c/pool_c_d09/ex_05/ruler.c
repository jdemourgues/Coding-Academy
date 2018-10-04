/*
** ruler.c for print_tab in /home/jerome/rendu/pool_c_d09/ex_01
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct 12 09:24:42 2017 demourgues
** Last update Wed Oct 18 08:18:12 2017 demourgues
*/
#include <unistd.h>
#include <stdlib.h>
#include "rubiks.h"

void print_tab(int **table)
{
  int li;
  int cl;

  li = 0;
  cl = 0;
  my_putstr("-------------------\n");
  while(li < 4)
    {
      while (cl < 4)
	{
	  my_putstr(" | ");
	  my_putnbr(table[li][cl]);
	  cl++;	    
	}
      my_putstr(" |\n");
      my_putstr("-------------------\n");
      cl = 0;
      li++;
    }
}  


