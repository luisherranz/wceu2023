/**
 * WordPress dependencies
 */
import { store } from '@wordpress/interactivity';

const { state, selectors } = store( 'wceu2023', {
	selectors: {
		answered: () => {
			return Object.values( state.quizzes ).filter(
				( v ) => v.current !== null
			).length;
		},
		allAnswered: () => {
			return (
				selectors.answered( store ) ===
				Object.keys( state.quizzes ).length
			);
		},
		correct: () =>
			state.showAnswers
				? Object.values( state.quizzes ).filter(
						( v ) => v.current === v.correct
				  ).length
				: '?',
		allCorrect: () => {
			return selectors.correct() === Object.keys( state.quizzes ).length;
		},
	},
	actions: {
		checkAnswers: () => {
			state.showAnswers = true;
			state.selected = null;
		},
		reset: () => {
			state.showAnswers = false;
			Object.values( state.quizzes ).forEach( ( quiz ) => {
				quiz.current = null;
			} );
		},
	},
} );
