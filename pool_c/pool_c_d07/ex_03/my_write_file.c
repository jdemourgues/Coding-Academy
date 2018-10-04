/*
** my_write_file.c for my_write_file in /home/jerome/rendu/pool_c_d07/ex_03
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Tue Oct 10 17:46:05 2017 demourgues
** Last update Tue Oct 10 19:55:23 2017 demourgues
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
int	main(int argc, char** argv)
{
  char *file;
  int fd;
  int i;

  i = 2;
  if (argc <= 2)
    {
      my_putstr("Error.\n");      
    }
  file = argv[1];
  fd = open(file, O_RDWR | O_CREAT | O_TRUNC , S_IRUSR | S_IWUSR | S_IRGRP | S_IROTH);
  while (i <= argc-1)
    {
      write(fd, argv[i], my_strlen(argv[i]));
      write(fd,"\n",1);
      i++;
    }
  close(fd);
}


