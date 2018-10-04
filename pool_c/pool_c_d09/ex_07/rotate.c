/*
** rotate.c for rotate in /home/jerome/rendu/pool_c_d09/ex_07
**
** Made by demourgues
** Login   <jerome>
**
** Started on  Thu Oct 12 19:46:55 2017 demourgues
** Last update Fri Oct 13 20:23:58 2017 demourgues
*/
#include <stdlib.h>
#include <stdio.h>
#include "rubiks.h"

void rotate_lines(int **table, int line, int offset)
{
  int cpt;
  cpt = 0;
  if (offset >= 0)
    {
      while (cpt < offset)
	{
	  algo_line (table, line);
	  cpt++;
	}
    }

  while (cpt < MY_ABS(offset))
    {
      algo_line_reverse(table, line);
      cpt++;
    }
}

void rotate_columns(int **table, int column, int offset)
{
  int cpt;
  cpt = 0;
  if (offset > 0)
    {
    while (cpt < offset)
	{
	  algo_column (table, column);
	  cpt++;
	}
    }
  while (cpt < MY_ABS(offset))
    {
      algo_column_reverse(table, column);
      cpt++;
    }
}
