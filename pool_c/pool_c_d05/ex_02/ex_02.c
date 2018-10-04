/*
** ex_02.c for ex_02.c in /home/jerome/rendu/pool_c_d05/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 11:44:09 2017 demourgues
** Last update Fri Oct  6 14:35:51 2017 demourgues
*/
#include <stdio.h>
#include <unistd.h>

void	my_putchar(char a)
{
write (1, &a, 1);
}

int	my_strlen(char *str)
{
  int i;
  
  i = 0;
  while (str[i] != '\0')
    {
      ++i;
    }
  return(i);
}

void	my_swap(char *adr1, char *adr2)
{
  char nb3;
  nb3 = *adr1;
  *adr1 = *adr2;
  *adr2 = nb3;
}

char	*my_revstr (char *str)
{
  int cpt1 = 0;
  int cpt2 = 0;

  cpt2 = my_strlen(str)-1;
  while (cpt1 <= cpt2)
    {
      my_swap(&str[cpt1], &str[cpt2]);
      cpt1 = cpt1 + 1;
      cpt2 = cpt2 -1;
    }
  return(str);  
}

/*int	main()
{
  char str[6] = "Hello";

  printf ("%s\n", my_revstr(str));
}
*/
