/*
** my_hello.c for my_hello in /home/jerome/rendu/pool_c_d07/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Tue Oct 10 17:05:22 2017 demourgues
** Last update Tue Oct 10 18:31:46 2017 demourgues
*/
#include  <stdio.h>
#include  <stdlib.h>

int	main(int argc, char **argv)
{
  int i = 0;
  int n;

  if (argc == 1)
    {
      printf("Error.\n");
      return(0);
    }
  n = atoi(argv[1]);
  if (n <= 0)
    {
      printf("Error.\n");
      return(0);
    }
	    
  while (i < n)
    {
      printf("Hello\n");
      i++;
    }
}
