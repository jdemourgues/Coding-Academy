/*  
//   ex_04 for my_strup.c in /home/jerome/rendu/pool_c_d06/ex_04
//   
//   Made by demourgues
//  Login   <jerome>
//   
//   Started on  Mon Oct  9 15:18:55 2017 demourgues
** Last update Mon Oct  9 17:10:19 2017 demourgues
*/

#include <stdio.h>
#include <stdlib.h>

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

char *my_strcpy(char *strd, char *strs)
{
  int i = 0;
  
  while (strs[i] != '\0')
    {
    strd[i] = strs[i];
    ++i;
    }
  strd[i] = '\0';
  return(strd);
}

char *my_strdup(char *str)
{
  int len = my_strlen(str);
  char *strd = malloc(sizeof(*str) * len);
  
  strd = my_strcpy(strd, str);
  return(strd);
}

/*int	main()
{
  char *str = "hello World";
  char *strd;

  printf ("%p\n", str);
  strd = my_strdup(str);
  printf ("%p\n", strd);
  return(0);
}
*/
