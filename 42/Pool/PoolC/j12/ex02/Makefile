# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2016/02/03 02:08:42 by tjacquin          #+#    #+#              #
#    Updated: 2016/02/03 02:09:07 by tjacquin         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

NAME = ft_tail

SRC = ft_tail.c ft_utils.c

INCLUDES = ft_util.h

OBJ = ft_tail.o ft_utils.o

all: $(NAME)

$(NAME):
	gcc -c -Wall -Wextra -Werror $(SRC) $(INCLUDES)
	gcc -o $(NAME) $(OBJ)
	rm -f ft_util.h.gch

clean:
	rm -f $(OBJ)

fclean: clean
	rm -f $(NAME)

re: fclean all
