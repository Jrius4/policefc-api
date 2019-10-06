import { combineReducers } from 'redux';
import postReducer from './postReducer';
import playerReducer from './playerReducer';
import matchReducer from './matchReducer';

export default combineReducers({
  post: postReducer,
  player:playerReducer,
  match:matchReducer,
});
