class Login extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: ''
        };
        this.submitHandler=this.props.onSubmit;
        this.handleEmailChange = this.handleEmailChange.bind(this);
        this.handlePasswordChange = this.handlePasswordChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    render() {
        return <div className="row align-content-center">
            <form className="login-form" onSubmit={this.handleSubmit}>
                <h1 className="text-primary text-center mb-5 pb-3">Login Required</h1>
                <div className="form-group form-inline">
                    <div className="col-2 pr-2  text-center">
                        <i className="fa fa-user "></i>
                    </div>

                    <input type="text" className="form-control col-10" placeholder="Email Address" title="email address"
                           id="UserName" onChange={this.handleEmailChange} value={this.state.email} name="email"/>

                </div>
                <div className="form-group form-inline log-status">
                    <div className="col-2 pr-2 text-center">
                        <i className="fa fa-lock pr-2"></i>
                    </div>
                    <input type="password" className="form-control col-10" id="Passwod" title="password" name="password"
                           onChange={this.handlePasswordChange} value={this.state.password}/>
                </div>
                <div className="text-right">
                    <span className="error">Invalid Credentials</span>
                    <a className="link" href="#">Lost your password?</a>
                    <button id="login-btn" type="submit" className="match-parent-width   mt-4">Login</button>
                </div>
            </form>
        </div>
    }

    handleEmailChange(event) {
        this.setState({email: event.target.value})
    }

    handlePasswordChange(event) {
        this.setState({password: event.target.value})
    }

    handleSubmit(event) {
        event.preventDefault();
        this.submitHandler(this.state.email,this.state.password);
    }
}