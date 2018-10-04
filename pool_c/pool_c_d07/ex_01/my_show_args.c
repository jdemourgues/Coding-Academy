/*
** my_show_ars.c for my_show_args in /home/jerome/rendu/pool_c_d07/ex_01
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Tue Oct 10 15:46:34 2017 demourgues
** Last update Tue Oct 10 16:58:39 2017 demourgues
*/
#include	<stdio.h>

void	main(int argc, char **argv)
{

  int i;

  if (argc == 1)
  {printf ("\n");
  }
  i = 1;
  while ( i < argc )
	      {printf ("%s\n", argv[i]);
	       ++i;
	      }
}
