/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_utils.c                                         :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/02/03 02:11:03 by tjacquin          #+#    #+#             */
/*   Updated: 2016/02/03 02:11:28 by tjacquin         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "ft_util.h"

void	ft_putstr(char *str)
{
	int		i;

	i = -1;
	while (str[++i])
		;
	write(2, str, i);
}

int		ft_atoi(char *str)
{
	int		sign;
	int		nb;
	int		i;

	i = 0;
	nb = 0;
	sign = 0;
	while ((str[i] == ' ') || (str[i] == '\n') || (str[i] == '\t') ||
			(str[i] == '\v') || (str[i] == '\f') || (str[i] == '\r'))
		i++;
	if (str[i] == '-')
		sign = 1;
	if (str[i] == '-' || str[i] == '+')
		i++;
	while (str[i] && str[i] <= '9' && str[i] >= '0')
	{
		nb *= 10;
		nb += (int)str[i] - '0';
		i++;
	}
	if (sign == 1)
		return (-nb);
	else
		return (nb);
}

int		ft_strcmp(char *s1, char *s2)
{
	int		i;

	i = 0;
	while (s1[i] == s2[i] && s1[i])
		i++;
	return (s1[i] - s2[i]);
}
