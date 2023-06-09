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
			correct: ( { state } ) =>
				state.wceu2023.showAnswers
					? Object.values( state.wceu2023.quizzes ).filter(
							( v ) => v.current === v.correct
					  ).length
					: '?',
		},
	},
	actions: {
		wceu2023: {
			checkAnswers: ( { state } ) => {
				state.wceu2023.showAnswers = true;
				state.wceu2023.selected = null;
			},
			reset: ( { state } ) => {
				state.wceu2023.showAnswers = false;
				Object.values( state.wceu2023.quizzes ).forEach( ( quiz ) => {
					quiz.current = null;
				} );
			},
		},
	},
} );
