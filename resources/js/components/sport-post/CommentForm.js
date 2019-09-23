import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { addComment } from '../../actions/postActions';
import TextAreaFieldGroup from '../../common/TextAreaFieldGroup';
import TextFieldGroup from '../../common/TextFieldGroup';

class CommentForm extends Component {
  constructor(props){
      super(props);
      this.state ={
        author_name:'',
        author_email:'',
        body:'',
        post_id:null,
        errors: {}
      };
      this.onChange = this.onChange.bind(this);
      this.onSubmit = this.onSubmit.bind(this);
  }

  componentDidUpdate(newProps) {
    if (newProps.errors) {
      this.setState({ errors: newProps.errors });
    }
  }

  onSubmit(e){
    e.preventDefault();
    const { postId } = this.props;

    const newComment = {
      body:this.state.body,
      author_email:this.state.author_email,
      author_name:this.state.author_name,
      post_id:postId,
    };
    this.props.addComment(postId, newComment);
    this.setState({
      body:'',
      author_email:'',
      author_name:'',
      post_id:null
    });
  }

  onChange(e){
    this.setState({[e.target.name]:e.target.value})
  }
  
  render() {
    const { errors } = this.state;

    return (
      <div>
        
        <div className="post-form mb-3">
            <div className="card card-info">
              <div className="card-header bg-info text-white">
                Make a comment...
              </div>
              <div className="card-body">
                <form onSubmit={this.onSubmit}>
                  <div className="form-group">
                    <TextFieldGroup
                      placeholder="* Full Names"
                      name="author_name"
                      value={this.state.author_name}
                      onChange={this.onChange}
                      error={errors.author_name}

                    />
                    <TextFieldGroup
                      type="email"
                      placeholder="* Email Field"
                      name="author_email"
                      value={this.state.author_email}
                      onChange={this.onChange}
                      error={errors.author_email}

                    />
                    <TextAreaFieldGroup
                      placeholder="Reply to Post"
                      name="body"
                      value={this.state.body}
                      onChange={this.onChange}
                      error={errors.body}

                    />
                  </div>
                  <button type="submit" className="btn btn-dark">Submit</button>
                </form>
              </div>
            </div>
          </div>      
      </div>
    )
  }
}
CommentForm.propTypes = {
  addComment: PropTypes.func.isRequired,
  postId: PropTypes.number.isRequired,
  // errors: PropTypes.object.isRequired
};

const mapStateToProps = state => ({
  errors: state.errors
});

export default connect(mapStateToProps, { addComment })(CommentForm);
