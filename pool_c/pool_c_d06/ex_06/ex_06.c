/*
** ex_06.c for my_concat_str in /home/jerome/rendu/pool_c_d06/ex_06
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Mon Oct  9 16:51:29 2017 demourgues
** Last update Mon Oct  9 18:56:31 2017 demourgues
*/
#include  <stdlib.h>
//#include  <stdio.h>
#include  <unistd.h>

void my_putchar(char a)
{
  write(1, &a, 1);
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

void my_putstr(char *str)
{
  int i;
  
  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}

char *my_strcpyn(char *strd,char *strs, int n)
{
  int i = 0;
  
  while (strs[i] != '\0')
    {
      strd[n] = strs[i];
      i++;
      n++;
    }
  strd[n] = '\0';
  return(strd);
}

char	*my_concat_str( char	**tab )
{
  int lentab = 0;
  int cpt1 = 0;
  int cpt2 = 0;
  char *strf; 
  
  while (tab[cpt1])
    {
      lentab = lentab + my_strlen( tab[ cpt1 ]);
      ++cpt1;
    }
  strf = malloc (sizeof( char ) + lentab ) ;
  cpt1 = 0 ;
  cpt2 = 0 ;
  while (tab [ cpt2 ] )
    {
      strf = my_strcpyn(strf, tab[cpt2], cpt1);
      cpt1 = my_strlen(strf);
      cpt2++;
    }
  return(strf);
}


/*int main(int argc, char const *argv[])
{
char *tab1[] = {
"zog",
"zog",
NULL
};
char *tab2[] = {
"Bonjour",
"",
" ",
"les amis ! ",
NULL
};

printf("%s\n", my_concat_str(tab1));
printf("%s\n", my_concat_str(tab2));
(void)argc;
(void)argv;
return 0;
}
*/
