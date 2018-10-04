/*
** in_in.c for is_in in /home/jerome/rendu/pool_c_d09/ex_04
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct 12 18:36:17 2017 demourgues
** Last update Tue Oct 17 14:22:45 2017 demourgues
*/

#include <stdlib.h>
#include <stdio.h>
#include "rubiks.h"

int is_in_line(int **table, int line,int value)
{
  int i;
  int res;

  i = 0;
  while (i < 3)
    {
      if (table[line][i] != value)
	{
	}
      else
	{
	  return(0);
	}
      i++;
    }
  return (1);
  
}

int is_in_col(int **table, int column, int value)
{
  int i;
  int res;

  i = 0;
  while (i < 3)
    {
      if (table[i][column] != value)
	{}
      else
	{
	  return(0);
	}
      i++;
    }
  return (1);
  
}
