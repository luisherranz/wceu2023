import { store } from '@wordpress/interactivity';

store( 'wceu2023', {
	actions: {
		toggle() {
			const context = getContext();
			context.isOpen = ! context.isOpen;
		},
	},
	callbacks: {
		logIsOpen() {
			const context = getContext();
			// Log the value of `isOpen` each time it changes.
			console.log( `Is open: ${ context.isOpen }` );
		},
	},
} );
