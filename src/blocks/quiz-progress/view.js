import { store } from '@wordpress/interactivity';

store( {
	selectors: {
		wceu2023: {
			answered: ( { state } ) =>
				Object.values( state.wceu2023.quizzes ).filter(
					( v ) => v.current !== null
				).length,
		},
	},
} );
