import NavBar from './NavBar';
import Footer from './Footer';

export default function Layout({ children }) {
    return (
        <div className="t10-root">
            <NavBar />
            {children}
            <Footer />
        </div>
    );
}
