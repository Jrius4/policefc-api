import React, { Component } from 'react';
import PropTypes from 'prop-types';
import Highlights from '../../policefc/highlights/Highlights';
import {getPosts,get2Posts} from '../../../actions/postActions';
import {getMatches} from '../../../actions/matchActions';
import {getPlayers} from '../../../actions/playerActions';
import Spinner from '../../../common/Spinner';
import {connect} from 'react-redux';
import AdvancedHighlight from '../../policefc/highlights/AdvancedHighlight';
import ComingMatch from '../../matches/ComingMatch';
import NewsHighlights from '../../policefc/highlights/NewsHighlights';
import MatchOutline from '../../matches/MatchOutline';
import OurNewsHome from '../../policefc/our-new-home/OurNewsHome';
import OurTeam from '../../team/OurTeam';
import ExternalLinks from '../../../common/ExternalLinks';
import {Route} from 'react-router-dom';
class Landing extends Component {
  constructor(props)
  {
    super(props);
    this.state = {
      posts:null,
      matches:null,
      onChange:null,
      loading:false
    }
  }
  

  componentDidMount(){
    this.props.getPosts();
    this.props.get2Posts();
    this.props.getMatches();
    this.props.getPlayers();
  }
  render() {
    const {loading,posts,ourposts} = this.props.post;
    const {matches} = this.props.match;
    const {players} = this.props.player;
    let infoContent;

        if (posts === null || loading || ourposts===null || matches===null || players===null || this.props.match.loading || this.props.player.loading) {
          infoContent = <Spinner />;
        }
        else{
          infoContent = (
            <div>
              <NewsHighlights posts={posts}/>
              <ComingMatch matches={matches}/>
              <MatchOutline matches={matches}/>
              <OurNewsHome ourposts={ourposts}/>
              <Route
              path="/somelocalpath"
              component={ExternalLinks}
              target="/someexterna .com"
              />
              <OurTeam players={players}/>
            </div>
          )
        }
    return (
      <div className="landing-page">
        {infoContent}
      </div>
    )
  }
}
Landing.propTypes = {
  getPosts:PropTypes.func.isRequired,
  get2Posts:PropTypes.func.isRequired,
  getMatches:PropTypes.func.isRequired,
  getPlayers:PropTypes.func.isRequired,
  post:PropTypes.object.isRequired,
  match:PropTypes.object.isRequired
}
const mapStateToProps = state =>({
  post:state.post,
  match:state.match,
  player:state.player
})
export default connect(mapStateToProps,{getPosts,getMatches,getPlayers,get2Posts})(Landing);