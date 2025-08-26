import './App.css';
import Test from './componets/Test';  // 👈 also check spelling: folder should be "components" not "componets"

function Name() {
  return <p>Krish Patel</p>;
}

function App() {
  return (
    <>
      <h1>Hello World</h1>
      <Test />
      <Name />
    </>
  );
}

export default App;
