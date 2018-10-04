/*
** algo.c for algo.c in /home/jerome/rendu/pool_c_d09/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct 12 13:58:55 2017 demourgues
** Last update Fri Oct 13 18:28:19 2017 demourgues
*/
#include <unistd.h>
#include <stdlib.h>
#include "rubiks.h"

void algo_line(int **table, int line)
{
  int *lineC; 
  int temp;
  int cpt;

  cpt = 0;
  lineC = table[line];
  temp = lineC[0];

  while (cpt < 3)
    {
      lineC[cpt] = lineC[cpt + 1];
      cpt++;
    }
  lineC[3] = temp;
  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate Left line 0.\n");
    print_tab(table);
    my_putchar('\n');
  }
}

void	algo_column(int **table,int column)
{
  int temp;
  int cpt;

  cpt = 1;
  temp = table[0][column];
  while (cpt < 4)
    {
      table[cpt-1][column] = table[cpt][column];
      cpt++;
    }
  table[3][column] = temp;
  
  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate Top column  0.\n");
    print_tab(table);
    my_putchar('\n');
  }

}

void	algo_square(int**table,int square)
{
  int i;
  int j;
  int a;
  int b;
  int temp;

  if (square == 0)
    {
      a = 0;
      b = 0;
    }
  if (square == 1)
    {
      a = 0;
      b = 2;
    }		
  if (square == 2)
    {
      a = 2;
      b = 0;
    }
  if (square == 3)
    {
      a = 2;
      b = 2;
    }
  i = a;
  j = b;
  temp = table[i][j];
  table[i][j] = table[i+1][j];
  table[i+1][j] = table[i+1][j+1];
  table[i+1][j+1]=table[i][j+1];
  table[i][j+1]=temp;

  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate Clockwise square 0.\n");
    print_tab(table);
    my_putchar('\n');
  }

}
