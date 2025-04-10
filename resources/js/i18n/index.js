import { getEnLocale } from './en';
import { getRuLocale } from './ru';

export function getLocaleMessages() {
	return {
		en: getEnLocale(),
		ru: getRuLocale(),
	};
}