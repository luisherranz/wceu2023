import { store } from '@wordpress/interactivity';

store( {
	selectors: {
		wceu2023: {
			answered: ( { state } ) =>
				Object.values( state.wceu2023.quizzes ).filter(
					( v ) => v.current !== null
				).length,
			allAnswered: ( store ) => {
				const { selectors, state } = store;
				return (
					selectors.wceu2023.answered( store ) ===
					Object.keys( state.wceu2023.quizzes ).length
				);
			},
		},
	},
} );
