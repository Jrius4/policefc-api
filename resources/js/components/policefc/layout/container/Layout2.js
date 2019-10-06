import React from 'react'
import Toolbar from './Toolbar'
import Navbar from '../navbar/Navbar'
import Highlights from '../../highlights/Highlights'
import Spinner from '../../common/Spinner'
import LatestResultslights from '../../lastestresultslights/LatestResultslights'
import AboutHome from '../../about-home/AboutHome'
import NextMatchHome from '../../next-match-home/NextMatchHome'
import OurNewsHome from '../../our-new-home/OurNewsHome'
import NavbarSmall from '../navbar/NavbarSmall'
import TeamHomepage from '../../team-homepage/TeamHomepage'
import LatestVideoHome from '../../latest-video-home/LatestVideoHome'
import Footer from '../../footer/Footer'

class Layout2 extends React.Component{
  render(){
    return (
    <div>
      
            <Highlights/>
            <LatestResultslights/>
            <AboutHome/>
            <NextMatchHome/>
            <OurNewsHome/>
            <TeamHomepage/>
            <LatestVideoHome/>
     
      
    </div>
  )}
}

export default Layout2
