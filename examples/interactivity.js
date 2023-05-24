import { store } from '@wordpress/interactivity';

store( {
	actions: {
		toggle: ( { context } ) => {
			context.isOpen = ! context.isOpen;
		},
	},
	effects: {
		logIsOpen: ( { context } ) => {
			// Log the value of `isOpen` each time it changes.
			console.log( `Is open: ${ context.isOpen }` );
		},
	},
} );
