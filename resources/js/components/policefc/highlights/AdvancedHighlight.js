import React from 'react'
import Slider from 'react-animated-slider-2';
import 'normalize.css/normalize.css';
import './slider-animations.css';
import './styles.css';
import 'react-animated-slider-2/build/horizontal.css';
const AdvancedHighlight = (props) => {
  return (
	<>   
<Slider autoplay={3000} className="showcase">
	{props.posts.map((item, index) => (
		<div
			key={index}
            
            style={{background: item.image !==null?`url('/img/${item.image}') no-repeat center center`:`linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%)`,width:'100%'}}
		>
			<div className="uk-position-cover uk-flex-middle">
				
				<div className="uk-container uk-container-center uk-position-cover d-flex justify-content-end py-5">
					<div className="text-right text-light m-auto">
						<h1 className="text-light">{item.title}</h1>
						<p >{item.excerpt}</p>
						<button>{`Read More`}</button>
					</div>
				</div>

			</div>
		</div>
	))}
</Slider>
</>
  )
}

export default AdvancedHighlight
