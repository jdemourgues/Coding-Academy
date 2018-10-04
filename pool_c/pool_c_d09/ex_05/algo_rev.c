/*
** algo_rev.c for algo_reverse in /home/jerome/rendu/pool_c_d09/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct 12 13:58:55 2017 demourgues
** Last update Wed Oct 18 09:18:51 2017 demourgues
*/
#include <unistd.h>
#include <stdlib.h>
#include "rubiks.h"

void algo_line_reverse(int **table, int line)
{
  int temp;
  int cpt;

  cpt = 2;
  temp = table[line][3];

  while (cpt >= 0)
    {
      table[line][cpt+1] = table[line][cpt];
      cpt--;
    }
  table[line][0] = temp;

  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate right line 0.\n");
    print_tab(table);
    my_putchar('\n');
  }
}

void	algo_column_reverse(int **table,int column)
{
  int temp;
  int cpt;

  cpt = 3;
  temp = table[3][column];
  while (cpt > 0)
    {
      table[cpt][column] = table[cpt-1][column];
      cpt--;
    }
  table[0][column] = temp;
  
  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate Down column  0.\n");
    print_tab(table);
    my_putchar('\n');
  }

}

void	algo_square_reverse(int**table,int square)
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
  table[i][j] = table[i][j+1];
  table[i][j+1] = table[i+1][j+1];
  table[i+1][j+1]=table[i+1][j];
  table[i+1][j]=temp;

  if (PRINT_SQUARE_DEBUG__ == 1)
  {
    my_putstr("Rotate Counter Clockwise square 0.\n");
    print_tab(table);
    my_putchar('\n');
  }

}
