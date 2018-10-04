/*
** looking_value.c for look_for_value in /home/jerome/rendu/pool_c_d09/ex_05
**
** Made by demourgues
** Login   <jerome>
**
** Started on  Thu Oct 12 19:46:55 2017 demourgues
** Last update Mon Oct 16 13:18:54 2017 demourgues
*/
#include <stdlib.h>
#include <stdio.h>
#include "rubiks.h"

int *look_for_value(int **table, int *lines, int *columns, int value)
{
  int *res;
  int recl;
  int resc;
  int cptl;
  int cptc;

  cptl = 0;
  cptc = 0;
  res = NULL;
  while (cptl < 4)
    {
      if (lines[cptl] == EMPTY)
       {
        cptc = 0;
        while (cptc < 4)
         {
         if (columns[cptc] == EMPTY)
		  {
		    if (table[cptl][cptc] == value)
		    {
		      res = malloc(sizeof(int) * 2);
		      res[0] = cptl;
		      res[1] = cptc;
		      return(res);
		    }

		  }
          cptc++;
         }
       }
      cptl++;
    }
  return (res);
}
