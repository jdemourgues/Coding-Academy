/*
** strstr.c for ex_06.c in /home/jerome/rendu/pool_c_d05/ex_06
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 18:01:58 2017 demourgues
** Last update Fri Oct  6 20:23:33 2017 demourgues
*/

#include <stdio.h>

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

int my_strncmp(char *str1, char *str2, int n)
{
  int i = 0;
  int res = 0;

  while (str1[i] != '\0' && str2[i] != '\0' && i < n - 1 && str1[i]==str2[i])
    {
      i++;
    }
  res = str1[i] - str2[i];
  return(res);
}

char	*my_strstr(char *str1, char *str2)
{
  int len2 = my_strlen(str2);
  int i = 0;

  if (len2 == 0)
    return(0);
  while (str1[i] != '\0')
    {
      if (my_strncmp(&str1[i], str2, len2) == 0)
      {
        return(&str1[i]);
      }
      ++i;      
    }
  return(0);
}

/*int	main()
{
  char* str1 = "xobarlkjlkj";
  char* str2 = "lkjlkj";

  char *s = my_strstr(str1, str2);
  if (s)
    printf("%s\n", s);
  else
    printf("null\n");
}
*/
