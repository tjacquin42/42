/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_numchar.c                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/02/03 02:13:15 by tjacquin          #+#    #+#             */
/*   Updated: 2016/02/03 02:13:51 by tjacquin         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "hexdump.h"

int		ft_strlen(char *str)
{
	int		i;

	i = 0;
	while (str[i] != '\0')
		i++;
	return (i);
}

void	ft_putstr(char *str)
{
	write(1, str, ft_strlen(str));
}

void	ft_numchar(int num, int c)
{
	if (num == 0 && c == 0)
		ft_putstr("00000000");
	else if (num == 0 && c != 0)
		ft_putstr("0000000");
	else
	{
		if (num >= 16777216)
			ft_putstr("");
		else if (num >= 1048576)
			ft_putstr("0");
		else if (num >= 65536)
			ft_putstr("00");
		else if (num >= 4096)
			ft_putstr("000");
		else if (num >= 256)
			ft_putstr("0000");
		else if (num < 256)
			ft_putstr("00000");
		if (c == 0)
			ft_putchar('0');
	}
	if (num != 0)
		ft_hexa(num);
}
