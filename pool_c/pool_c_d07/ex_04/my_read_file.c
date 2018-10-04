/*
** my_read_file.c for my_read_file in /home/jerome/rendu/pool_c_d07/ex_04
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Tue Oct 10 20:03:54 2017 demourgues
** Last update Tue Oct 10 20:37:13 2017 demourgues
*/
#include  <sys/types.h>
#include  <sys/stat.h>
#include  <fcntl.h>
#include  <unistd.h>
#include  <stdlib.h>
#include  <stdio.h>

void my_putchar(char a)
{
  write(1, &a, 1);
}

void my_putstr(char *str)
{
  int i;
  
  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      ++i;
    }
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

int	main(int argc, char **argv)
{
  char *filename;
  int fd;
  char c;

  if (argc <= 1)
    {
      my_putstr("Error.\n");      
    }
  filename = argv[1];
  fd = open(filename, O_RDONLY);
  if (fd < 0)
    {
      my_putstr("Error.\n");      
    }
  while (read(fd,&c,1 ) > 0)
    {
      my_putchar(c);     
    }
  return(0);
}
