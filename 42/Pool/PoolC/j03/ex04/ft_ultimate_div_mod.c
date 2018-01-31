/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_ultimate_div_mod.c                              :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2015/10/16 19:26:13 by tjacquin          #+#    #+#             */
/*   Updated: 2015/10/20 00:28:27 by tjacquin         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

void	ft_ultimate_div_mod(int *a, int *b)
{
	int x;

	if (*b != 0)
	{
		x = *a;
		*a = *a / *b;
		*b = x % *b;
	}
}
