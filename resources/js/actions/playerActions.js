import axios from 'axios';
import { PLAYER_LOADING, GET_PLAYERS, GET_PLAYERS_PAGES,GET_PLAYERS_POSITIONS } from './types';

// Set loading state
export const setPlayerLoading = () => {
    return {
      type: PLAYER_LOADING
    };
  };

export const getPlayers = () => dispatch => {
    dispatch(setPlayerLoading());
    axios.get('/api/players')
    .then(
    response=>{
        dispatch({
        type: GET_PLAYERS,
        payload:response.data.data,
        itemsCountPerPage:response.data.per_page,
        totalItemsCount:response.data.total,
        activePage:response.data.current_page,
    })
})

}

// Get Post
export const getPlayerPosion = id => dispatch => {
    dispatch(setPlayerLoading());
    axios
      .get(`/api/player-positions/${id}`)
      .then(res =>
        dispatch({
          type: GET_PLAYERS_POSITIONS,
          payload: res.data
        })
      )
      .catch(err =>
        dispatch({
          type: GET_PLAYERS,
          payload: null
        })
      );
  };

export const handlePageChange = pageNumber => dispatch => {
dispatch(setPlayerLoading());
axios.get(`/api/players?page=${pageNumber}`)
.then(
    response=>{
        dispatch({
        type: GET_PLAYERS_PAGES,
        payload:response.data.data,
    })
})

}