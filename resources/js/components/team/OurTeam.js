import React, { Component } from "react";
import PropTypes from 'prop-types'
import PlayerItem from "../Players/PlayerItem";
import MemberItem from "../policefc/our-new-home/MemberItem";

class OurTeam extends Component {
    constructor(props){
        super(props);
        this.state = {

        }
    }
  render() {
    return (
     <div>
       
       <div className="tm-bottom-b-box tm-full-width  ">
            <div className="uk-container uk-container-center">
                <section id="tm-bottom-b" className="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1">
                        <div className="uk-panel">
                            <div className="our-team-main-wrap">
                                <div className="uk-container uk-container-center">
                                    <div className="uk-grid" data-uk-grid-match="">
                                        <div className="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div className="our-team-wrap">
                                                <div className="our-team-title">
                                                    <h3>Our <span>Team</span></h3>
                                                </div>
                                                <div className="our-team-text">
                                                    <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                </div>
                                                <div className="our-team-text additional">
                                                    <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                </div>
                                                <div className="team-read-wrap"><a className="team-read-more" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                  
                                        
                                        {this.props.players.map(
            (data,index)=>(
            <MemberItem 
            key={index} 
            image={data.profile_pic}
            shirtNumber={data.shirt_no}
            id={data.id}
            position={data.player_position.title}
            bio={data.bio}
            age={data.age}
            firstname={data.first_name} 
            lastname={data.last_name}
            socialmedia={data.player_social_media_links}/>))}
                                        </div>
                                </div>

                                <div className="our-team-btn"><a href="players.html"><span>More Info</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

     </div>
    );
  }
}

export default OurTeam;